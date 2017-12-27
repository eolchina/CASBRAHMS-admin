<?php

namespace App\Admin\Controllers;

use App\Models\Data\Specimen;
use App\Models\Data\Term;
use App\Models\Data\Geolocation;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SpecimenController extends Controller
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
            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Specimen::class, function (Grid $grid) {
            $grid->id('ID')->sortable();

            $grid->barcode('Barcode');
            $grid->colnumber('Collection Number');
            $grid->colyear('Year');
            $grid->colmonth('Month');
            $grid->colday('Day');
            $grid->geography('geography');
            $grid->elevation('elevation');
            $grid->habitat('habitat');

            $grid->terms()->pluck('name')->label();

            $states = [
                'on' => ['text' => 'YES'],
                'off' => ['text' => 'NO'],
            ];


            $grid->isType()->switch($states);
            // $grid->specimenimages()->pluck('pictures');

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
        return Admin::form(Specimen::class, function (Form $form) {
            $form->display('id', 'ID');


            // $form->text('barcode')->default('PE19876405');
            // $form->text('colnumber');
            // $form->date('colyear');
            // // $form->date('colmonth');
            // // $form->date('colday');
            // $form->text('geography');
            // $form->text('elevation');
            // $form->text('habitat');


            // $form->switch('isType');
            // $form->listbox('terms')->options(Term::all()->pluck('name', 'id'))->settings(['selectorMinimalHeight' => 300]);


            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');



            $form->tab('Specimen info', function (Form $form) {
                $form->text('barcode');
                $form->number('colnumber');
                $form->date('colyear');
            })->tab('Geography', function (Form $form) {
                $form->select("geolocation_id")->options(Geolocation::all()->pluck('geography', 'id'));
                $form->text('geography');
                $form->text('elevation');
                $form->text('habitat');
            })->tab('Determination', function (Form $form) {
                $form->listbox('terms')->options(Term::all()->pluck('name', 'id'))->settings(['selectorMinimalHeight' => 300]);
                $form->text('annotaion');
                $form->date('created_at');
                $form->date('updated_at');
            });
        });
        /**
         * tab group for specimen
         */
    }
}
