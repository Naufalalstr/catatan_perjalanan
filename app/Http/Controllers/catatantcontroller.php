<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catatantcontroller extends Controller
{
    public function destroy(Post $post){
        Post::destroy($post->nik);
        return redirect('catatan')->with('succes', 'Catatan berhasil dihapus');
    }
}
