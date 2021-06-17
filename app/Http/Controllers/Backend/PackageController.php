<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Package\PackageRequest;
use App\Models\Category\Category;
use App\Models\Itinerary\Itinerary;
use App\Models\Package\Package;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $category;

    function __construct(Category $category, Package $package, SubCategory $subcategory, Itinerary $itinerary)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->package = $package;
        $this->itinerary = $itinerary;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = $this->package->orderBy('created_at', 'desc')->get();
        return view('backend.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = $this->category->get();
        $subcategories = $this->subcategory->get();
        return view('backend.package.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        //
        if ($package = $this->package->create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $package, 'image');
            }
            if ($request->hasFile('banner_image')) {
                $this->uploadFile($request, $package, 'banner_image');
            }
            if ($request->hasFile('image1')) {
                $this->uploadFile($request, $package, 'image1');
            }
            if ($request->hasFile('image2')) {
                $this->uploadFile($request, $package, 'image2');
            }
            $p = 0;
            foreach ($request->itinerary_title as $it_title) {
                $itinerary = new Itinerary();
                $itinerary->package_id = $package->id;
                $itinerary->itinerary_title = $it_title;
                $itinerary->itinerary_description = $request->itinerary_description[$p];
                $itinerary->day = $request->day[$p];
                $itinerary->save();
                $p = $p + 1;
            }
        return redirect()->route('package.index')->withSuccess(trans('New Subcategory has been created'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
        $category_search = $this->category->find($package->category_id);
        $categories = $this->category->get();
        $subcategory_search = $this->subcategory->find($package->subcategory_id);
        $subcategories = $this->subcategory->get();
        $itineraries = $this->itinerary->where('package_id',$package->id)->get();
        return view('backend.package.edit', compact('package','category_search','categories','subcategory_search','subcategories','itineraries'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, Package $package)
    {
        //
        if ($package->update($request->data())) {
            $package->fill([
                'slug' => $request->title,
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $package, 'image');
            }
            if ($request->hasFile('banner_image')) {
                $this->uploadFile($request, $package, 'banner_image');
            }
            if ($request->hasFile('image1')) {
                $this->uploadFile($request, $package,'image1');
            }
            if ($request->hasFile('image2')) {
                $this->uploadFile($request, $package, 'image2');
            }
            $it_packages = Itinerary::where('package_id', $package->id)->get();
            foreach ($it_packages as $it_package) {
                $it_package->delete();
            }
            $p = 0;
            foreach ($request->itinerary_title as $it_title) {
                $itinerary = new Itinerary();
                $itinerary->package_id = $package->id;
                $itinerary->itinerary_title = $it_title;
                $itinerary->itinerary_description = $request->itinerary_description[$p];
                $itinerary->day = $request->day[$p];
                $itinerary->save();
                $p = $p + 1;
            }
        return redirect()->route('package.index')->withSuccess(trans('New Subcategory has been created'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $package = $this->package->find($id);
        $it_packages = Itinerary::where('package_id', $package->id)->get();
        foreach ($it_packages as $it_package) {
            $it_package->delete();
        }
        $package->delete();
        return redirect()->route('package.index')->withSuccess(trans('package has been deleted'));
    }

    function uploadFile(Request $request, $page, $type = null)
    {
        if ($type == 'image') {
            $file = $request->file('image');
            $path = 'uploads/package';
            $fileName = $this->uploadFromAjax($file, $path);
            if (!empty($page->image))
                $this->__deleteImages($page);

            $data['image'] = $fileName;
        }

        if ($type == 'image1') {
            $file = $request->file('image1');
            $path = 'uploads/package';
            $fileName = $this->uploadFromAjax($file, $path);
            if (!empty($page->image))
                $this->__deleteImages($page);

            $data['image1'] = $fileName;
        }

        if ($type == 'image2') {
            $file = $request->file('image2');
            $path = 'uploads/package';
            $fileName = $this->uploadFromAjax($file, $path);
            if (!empty($page->image))
                $this->__deleteImages($page);

            $data['image2'] = $fileName;
        }

        if ($type == 'banner_image') {
            $file = $request->file('banner_image');
            $path = 'uploads/package';
            $fileName = $this->uploadFromAjax($file, $path);
            if (!empty($page->banner_image))
                $this->__deleteImages($page);

            $data['banner_image'] = $fileName;
        }

        $this->updateImage($page->id, $data);

    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path1))
                unlink($subCat->image_path1);

            if (is_file($subCat->image_path2))
                unlink($subCat->image_path2);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);

        } catch (\Exception $e) {

        }
    }

    public function updateImage($packageId, array $data)
    {
        try {
            $package = package::find($packageId);
            $package = $package->update($data);
            return $package;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    public function packageCategoryAjax(Request $request)
    {
        $package = $this->subcategory->where('category_id',$request->category_id)->get();
        return response()->json([
            'data' => $package,
            'status' => true,
            'message' => "package Fetched Successfully."
        ]);
    }
}
