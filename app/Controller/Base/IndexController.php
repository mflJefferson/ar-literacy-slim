<?php
declare(strict_types=1);

namespace App\Controller\Base;

use App\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        $data = array(
            'success' => true
        );
        $course = 'abc-123-defg';
        $content = 'etica04.docx';

        $dir = __DIR__ . '/../../../upload/client/test/content/' . $course . '/' . $content;
        header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        echo file_get_contents($dir);
        die;

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index2($request, $response)
    {
        // https://ar-literacy.herokuapp.com/word

        return $this->view->render($response, 'cat/cat.php', [
            'a_variable' => 'Hello World',
            'others' => [
                'a' => 1,
                'b' => 2,
            ]
        ]);
    }

}