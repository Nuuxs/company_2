<?php

namespace App\Http\Controllers;

use App\Models\sliderfoto;
use Illuminate\Http\Request;

class SliderFotoController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        sliderfoto::create($data);

        return redirect()->route('settinghome.index')->with('success', 'Image berhasil ditambahkan!');
    }

    // edit
    public function edit(sliderfoto $sliderfoto)
    {
        return view('settinghome.editimg', compact('sliderfoto'));
    }

    // update
    public function update(Request $request, sliderfoto $sliderfoto)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($sliderfoto->image && file_exists(public_path($sliderfoto->image))) {
                unlink(public_path($sliderfoto->image));
            }

            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        $sliderfoto->update($data);

        return redirect()->route('settinghome.index')->with('success', 'image berhasil diperbarui!');
    }

    // destroy
    public function destroy(sliderfoto $sliderfoto)
    {
        if ($sliderfoto->image && file_exists(public_path($sliderfoto->image))) {
            unlink(public_path($sliderfoto->image));
        }

        $sliderfoto->delete();

        return redirect()->route('settinghome.index')->with('success', 'image berhasil dihapus!');
    }
}
