<?php



use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Spatie\MediaLibrary\Media;

class DownloadsController extends Controller
{
    public function download($id) {

        $file = Client::where([
            ['id', '=', $id],
            ['created_by_id', '=', Auth::getUser()->id]
            ])->first();

        $media = Media::where('model_id', $file->id)->first();
        $pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $file->id . DIRECTORY_SEPARATOR . $media->file );

        return Response::download($pathToFile);
    }
}
