<?php

namespace App\Admin\Controllers;

use App\Models\Data\Term;
use App\Models\Data\TermRank;
use App\Models\Data\TermAuthor;
use App\Models\Data\TermUsage;
use App\Models\Data\TermCommonName;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class DataController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Data Visulization header');
            $content->description('here is an examle of how taxonomic data could be visulized, it funny! description');

            $content->body(view('admin.charts.bar'));

        });
    }


    public function openMap()
    {
         return Admin::content(function (Content $content) {

            $content->header('Data Visulization header');
            $content->description('here is an examle of how taxonomic data could be visulized, it funny! description');

            // $content->body(view('admin.maps.openlayer'));//OpenLayers
            // $content->body(view('admin.maps.drag'));//OpenLayers use Bing map
            // $content->body(view('admin.maps.baidu'));//百度地图
            $content->body(view('admin.maps.tengxun'));//腾讯地图

        });
    }
}
