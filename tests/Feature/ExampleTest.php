<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Controllers\News\NewsController;
use App\Models\News;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_panel_exist()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function test_News_working()
    {
        $news = new News();
        $view = $this->view('News.index', ['news' => $news->getNews()]);
        foreach($news->getNews() as $item){
            $view->assertSee($item['title']);
        }
        
    }
}
