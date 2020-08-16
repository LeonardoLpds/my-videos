<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function showFolders()
    {
        $folders = $this->foldersWithVideos(storage_path('app/videos'));
        return view('folders', ['folders' => $folders]);
    }

    public function openFolder(Request $request)
    {
        $folder = $request->query('folder');
        $path = storage_path('app/videos') . "$folder";
        $videos = scandir($path);
        return view('videos', ['videos' => $videos, 'path' => $path, 'folder' => $folder]);
    }

    private function foldersWithVideos($dir, &$results = [])
    {
        $files = scandir($dir);

        foreach ($files as $value) {
            if ($value == "." || $value == ".." || in_array($dir, $results)) {
                continue;
            }

            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

            if (is_dir($path)) {
                foreach (scandir($path) as $fileName) {
                    if (is_file($path . '/' . $fileName) && strpos(mime_content_type($path . '/' . $fileName), 'video') !== false) {
                        $results[] = str_replace(realpath(storage_path('app/videos')), '', $path);
                        break;
                    }
                }

                $this->foldersWithVideos($path, $results);
            }
        }

        return $results;
    }
}
