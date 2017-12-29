<?php

namespace App\Admin\Controllers;

use Illuminate\Support\Facades\DB;
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

class TermController extends Controller
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
            $content->header('Taxonomic terms header');
            $content->description('here is an examle of how taxonomic term data could be used description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Term::class, function (Grid $grid) {
            $grid->id('ID')->sortable();

            $grid->name('name');
            $grid->commonName('CommonName');

            $grid->rank()->localName('分类等级');

            $grid->author()->name('作者');
            $grid->usage()->name('Usage');

            $grid->refProto('Reference');
            $grid->refLink('Links');

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Term::class, function (Form $form) {
            $form->display('id', 'ID');

            $form->text('name', 'Name');

            $form->select('rank', 'Rank')->options(TermRank::all()->pluck('localName'));
            $form->select('usage', 'Usage')->options(TermUsage::all()->pluck('name'));
            $form->select('commonname', 'Common Name')->options(TermCommonName::all()->pluck('name'));


            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
        });
    }
}
