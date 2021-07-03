<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhyChooseUs\WhyChooseUsRequest;
use App\Models\WhyChooseUs\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    protected $whychooseus;

    function __construct(WhyChooseUs $whychooseus)
    {
        $this->whychooseus = $whychooseus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whychooseus = $this->whychooseus->orderBy('created_at', 'asc')->get();

        return view('backend.whychooseus.index', compact('whychooseus'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.whychooseus.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhyChooseUsRequest $request)
    {
        //
        if ($whychooseus = $this->whychooseus->create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $whychooseus);
            }
            return redirect()->route('whychooseus.index');
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
    public function edit(WhyChooseUs $whychooseus)
    {
        //
        return view('backend.whychooseus.edit', compact('whychooseus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WhyChooseUsRequest $request, WhyChooseUs $whychooseus)
    {
        //
        if ($whychooseus->update($request->data())) {
            $whychooseus->fill([
                'slug' => $request->title,
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $whychooseus);
            }
        }
        return redirect()->route('whychooseus.index')->withSuccess(trans('whychoose has been updated'));
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
        $whychooseus = $this->whychooseus->find($id);
        $whychooseus->delete();
        return redirect()->route('whychooseus.index')->withSuccess(trans('whychooseus has been deleted'));
    }

    function uploadFile(Request $request, $whychooseus)
    {
        $file = $request->file('image');
        $path = 'uploads/whychooseus';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($whychooseus->image))
            $this->__deleteImages($whychooseus);

        $data['image'] = $fileName;
        $this->updateImage($whychooseus->id, $data);

    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }

    public function updateImage($whychooseusId, array $data)
    {
        try {
            $whychooseus = $this->whychooseus->find($whychooseusId);
            $whychooseus = $whychooseus->update($data);
            return $whychooseus;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
