<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMailNotifiable;
use App\Mail\SendContactInfo;
use App\Models\Album\Album;
use App\Models\Menu\Menu;
use App\Models\Menu\SubMenu;
use App\Models\Client\Client;
use App\Models\Document\Document;
use App\Models\Event\Event;
use App\Models\Gallery\Gallery;
use App\Models\Team\Team;
use App\Models\Page\Page;
use App\Models\Project\Project;
use App\Models\Sector\Sector;
use App\Models\Slider\Slider;
use App\Models\Timeline\Timeline;

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
        
        
        return view('frontend.home', compact('menus','sliders','albums'));
    }

    public function about(Sector $sectors, Event $events)
    {
        $eventses = Event::where('is_published', 1)->get();
        $sectors = Sector::where('is_published', 1)->get();
        return view('frontend.about.about', compact('sectors','eventses'));
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


    public function sendcontact(Request $request)
    {
        $data = $request->all();
        //dd($request->all());
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

}
