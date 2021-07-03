<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMailNotifiable;
use App\Mail\PackageBooked;
use App\Mail\SendContactInfo;
use App\Models\Album\Album;
use App\Models\BookPackage\BookPackage;
use App\Models\Category\Category;
use App\Models\Menu\Menu;
use App\Models\Menu\SubMenu;
use App\Models\Deal\Deal;
use App\Models\Document\Document;
use App\Models\Event\Event;
use App\Models\Gallery\Gallery;
use App\Models\Itinerary\Itinerary;
use App\Models\Package\Package;
use App\Models\Team\Team;
use App\Models\Page\Page;
use App\Models\Slider\Slider;
use App\Models\SubCategory\SubCategory;
use App\Models\Testimonial\Testimonial;
use App\Models\WhyChooseUs\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{


    public function homepage()
    {
        $albums = Album::where('is_featured', 1)->where('is_published', 1)->get();

        $sliders = Slider::where('is_published',0)->get();
        $menus = Menu::where('is_published',0)->get();
        $packages = Package::where('is_featured',1)->latest()->take(6)->get();
        $deals = Deal::where('is_featured',1)->get();
        $trekkings = Package::where('category_id',2)->get();
        $categories = Category::get();
        $testimonials = Testimonial::get();
        $teams = Team::get();

        return view('frontend.home', compact('menus','sliders','albums','packages','deals','trekkings','categories','testimonials','teams'));
    }


    public function gallery()
    {
        $albums = Album::where('is_published', 1)->latest()->get();
        $galleries = Gallery::where('is_published', 1)->latest()->get();
        return view('frontend.gallery.index', compact('galleries', 'albums'));
    }



    public function contact()
    {
        return view('frontend.contact.contact');
    }


    public function packagebook(Request $request)
    {
        $package = Package::where('slug',$request->package_slug)->first();
        $orderData['fullname'] = $request->fullname;
        $orderData['email'] = $request->email;
        $orderData['phone'] = $request->phone;
        $orderData['date'] = $request->date;
        $orderData['group_size'] = $request->group_size;
        $orderData['message'] = $request->message;
        $orderData['package_id'] = $package->id;
        if($data = BookPackage::create($orderData)) {
            Mail::to('himalayanshepherd@gmail.com')->send(new PackageBooked($data, $package));
            return redirect()->back()->withSuccess(trans('Package Booked Successfully'));
        } else {
            return redirect()->back()->withSuccess(trans('Package Cannot be Booked at the moment'));
        }

    }

    public function sendcontact(Request $request)
    {
        $data = $request->all();
        Mail::to('himalayanshepherd@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function searchResult(Request $request)
    {
        $categories = Category::all();
        $subcategory = SubCategory::all();
        $search_title = $request->keyword;
        if(isset($request->keyword) && !empty($request->keyword)){
            $packages = Package::where('category_id',$request->category_id)
                        ->orwhere('title','LIKE',"%".$request->keyword."%")
                        ->orwhere('description','LIKE',"%".$request->keyword."%")->get();

        }

        return view('frontend.package.package-search', compact('categories','subcategory','search_title','packages'));


    }

    public function page($slug = null)
    {
        if ($slug) {
            $page = Page::whereSlug($slug)->first();
            if ($page == null) {
                $package = Package::whereSlug($slug)->first();
                if ($package) {
                    $packages = Package::latest()->take(4)->get();
                    $deal = Deal::where('package_id',$package->id)->first();
                    $itineraries = Itinerary::where('package_id',$package->id)->get();
                        return view('frontend.package.packagedetail', compact('package','deal','itineraries','packages'));
                }
            }
            if ($page) {
                if ($page->slug == 'about-us') {
                    $whychooseus = WhyChooseUs::latest()->take(3)->get();
                    return view('frontend.about.about',compact('page','whychooseus'));
                }
            }
            else
            {
                return view('frontend.errors.404');
            }
        }


    }

    public function packageDetail(Package $package)
    {
        $packages = Package::where('is_trending',1)->take(4)->get();
        $deal = Deal::where('package_id',$package->id)->first();
        $itineraries = Itinerary::where('package_id',$package->id)->get();
        return view('frontend.package.packagedetail', compact('package','deal','itineraries','packages'));

    }

    public function expedition() {
        $categories = Category::get();
        return view('frontend.expedition.expedition',compact('categories'));
    }

    public function packageCategory(Category $category) {
        $packages = Package::where('category_id',$category->id)->get();
        return view('frontend.package.package-category', compact('category','packages'));
    }

}
