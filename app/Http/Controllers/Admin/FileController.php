<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FileController extends Controller
{
    public function destroy(File $file)
    {
        $this->deleteFile($file->file);
        $file->delete();
        Alert::success("File deleted successfully");
        return back();
    }

}
