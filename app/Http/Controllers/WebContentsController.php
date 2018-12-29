<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebContent;

class WebContentsController extends Controller
{
    public function edit (Request $request, $id)
    {
        $content = WebContent::find($id);

        return view ('web-contents.edit', compact('content'));
    }

    public function update (Request $request)
    {
        $content = WebContent::find($request->id);
        $content->content = $request->content;
        $content->save();

        return redirect('/');
    }
}
