namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Pembelian_tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response
use Illuminate\Http\RedirectResponse

class HistoryController extends Controller
{
    public function index()
    {
        // Mengambil semua riwayat pembelian tiket berdasarkan pengguna yang sedang login
        $historyItems = Pembelian_tiket::where('id_users', Auth::id())->with('objekWisata')->get();

        // Menampilkan halaman sejarah dengan data riwayat pembelian tiket
        return view('history.index', compact('historyItems'));
    }

   
    public function destroy($id)
    {
        // Menghapus riwayat pembelian tiket berdasarkan id
        $historyItem = Pembelian_tiket::findOrFail($id);
        $historyItem->delete();

        // Mengarahkan kembali ke halaman sejarah dengan pesan sukses
        return redirect()->route('history.index')->with('success', 'Riwayat pembelian tiket berhasil dihapus');
    }

    public function buyAgain($id)
    {
        // Logic untuk membeli objek wisata lagi, bisa berupa mengarahkan ke halaman pemesanan
        $historyItem = Pembelian_tiket::findOrFail($id);
            return view('objek-wisata.index');

        // Redirect ke halaman pemesanan 
        return redirect()->route('objek-wisata.pembelian_tiket', ['id' => $historyItem->id_destinasi]);

    }

}
