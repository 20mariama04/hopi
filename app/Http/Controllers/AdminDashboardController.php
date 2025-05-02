namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Remove or comment out the query related to the specialties table
        // $specialties = Specialties::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9])->get();

        // Pass other necessary data to the view
        return view('hospital.admin-dashboard', [
            // 'specialties' => $specialties, // Remove this line if specialties are not needed
            // Add other data as needed
        ]);
    }
}