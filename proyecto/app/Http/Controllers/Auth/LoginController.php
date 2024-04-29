namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// app/Http/Controllers/Auth/LoginController.php
public function login(Request request)
{
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        // Asigna un mensaje de bienvenida basado en el rol del usuario
        $role = auth()->user()->role;

        if ($role === 'admin') {
            $request->session()->flash('welcome', 'Bienvenido, Admin!');
        } elseif ($role === 'cajero') {
            $request->session()->flash('welcome', 'Bienvenido, Cajero!');
        } elseif ($role === 'vendedor') {
            $request->session()->flash('welcome', 'Bienvenido, Vendedor!');
        }

        return redirect()->intended(); // Deja que el middleware haga el resto
    }

    return back()->withErrors(['message' => 'Credenciales inválidas']);
}
class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario
        return redirect('/'); // Redirecciona al usuario a la página principal después del logout
    }
}
