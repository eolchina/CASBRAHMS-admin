<?php

namespace App\Admin\Controllers;

use App\Models\Data\Term;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TermTestController extends Controller
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
            $content->header('header-taxonomy-terms-test');
            $content->description('description');

            // $content->body($this->grid());
            //
           
            // $content->body(view('admin.tests.index', ['root' => Term::root()]));


            $content->body(view('admin.tests.index', [

                'root' => Term::root(),
                'tree' => Term::where('name', '=', 'Root')->first()->getDescendantsAndSelf()->toHierarchy(),
                

            ]));
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

            $grid->name();

            $grid->created_at();
            $grid->updated_at();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->disableIdFilter();

                $filter->like('name', 'name');

                $filter->between('updated_at')->datetime();
            });
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

            $form->text('name', 'Taxon Name');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
