<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\detail;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
 
        if (Auth::attempt(['nik'=>$request->nik,'password'=>$request->password])) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->with('loginerror','Password Salah');
    }

    public function destroy($id){
        dd($id)
        $data=detail::findOrFail($id)
        $data->delete()
        return redirect('catatan')->with('succes', 'Catatan berhasil dihapus');
    }
}
