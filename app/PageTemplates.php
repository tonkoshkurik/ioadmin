<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */


    private function about_us()
    {
        $this->crud->addField([
                        'name' => 'content',
                        'label' => trans('backpack::pagemanager.content'),
                        'type' => 'wysiwyg',
                        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
                    ]);
    }


    private function home()
    {
      $this->crud->addField([   // CustomHTML
        'name' => 'metas_separator',
        'type' => 'custom_html',
        'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
      ]);

      $this->crud->addField([
        'name' => 'meta_title',
        'label' => trans('backpack::pagemanager.meta_title'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_description',
        'label' => trans('backpack::pagemanager.meta_description'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_keywords',
        'type' => 'textarea',
        'label' => trans('backpack::pagemanager.meta_keywords'),
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator',
        'type' => 'custom_html',
        'value' => '<br><hr>',
      ]);

      $this->crud->addField([
        'name' => 'content',
        'label' => 'Зачем я это делаю',
        'type' => 'summernote',
        'placeholder' => 'Зачем я это делаю',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project1_title',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project1_seasons',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project1_descr',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project1_link',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project2_title',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);


      $this->crud->addField([
        'name' => 'project2_seasons',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project2_descr',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project2_link',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project3_title',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project3_seasons',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project3_descr',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'name' => 'project3_link',
        'type' => 'text',
        'fake' => true,
        'store_in' => 'extras',
      ]);


      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator',
        'type' => 'custom_html',
        'value' => '<br><h3>Наши достижения</h3><hr>',
      ]);

      $this->crud->addField([
        'label' => 'Количество участников',
        'type' => 'number',
        'name' => 'first_number',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'label' => 'Городов и населенных пунктов',
        'type' => 'number',
        'name' => 'second_number',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([
        'label' => 'Сброшенных кг',
        'type' => 'number',
        'name' => 'third_number',
        'fake' => true,
        'store_in' => 'extras',
      ]);

      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator2',
        'type' => 'custom_html',
        'value' => '<br><h3>Почему это работает?</h3><hr>',
      ]);

      $this->crud->addField([
        'name' => 'whyitswork',
        'type' => 'summernote',
        'fake' => true,
        'store_in' => 'extras'
      ]);

      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator3',
        'type' => 'custom_html',
        'value' => '<br><h3>Уникальная система</h3><hr>',
      ]);

      $this->crud->addField([
        'name' => 'sistem',
        'type' => 'summernote',
        'fake' => true,
        'store_in' => 'extras'
      ]);

      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator4',
        'type' => 'custom_html',
        'value' => '<br><h3>Наша команда</h3><hr>',
      ]);

      $this->crud->addField([
        'name' => 'command',
        'type' => 'summernote',
        'fake' => true,
        'store_in' => 'extras'
      ]);

      $this->crud->addField([
        'name' => 'command_link',
        'type' => 'text',
        'fake' => true,
      ]);
    }

    private function projects()
    {
      $this->crud->addField([   // CustomHTML
        'name' => 'metas_separator',
        'type' => 'custom_html',
        'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
      ]);

      $this->crud->addField([
        'name' => 'meta_title',
        'label' => trans('backpack::pagemanager.meta_title'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_description',
        'label' => trans('backpack::pagemanager.meta_description'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_keywords',
        'type' => 'textarea',
        'label' => trans('backpack::pagemanager.meta_keywords'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator',
        'type' => 'custom_html',
        'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
      ]);
      $this->crud->addField([
        'name' => 'content',
        'label' => trans('backpack::pagemanager.content'),
        'type' => 'wysiwyg',
        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
      ]);
    }

    private function contacts()
    {
      $this->crud->addField([   // CustomHTML
        'name' => 'metas_separator',
        'type' => 'custom_html',
        'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
      ]);

      $this->crud->addField([
        'name' => 'meta_title',
        'label' => trans('backpack::pagemanager.meta_title'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_description',
        'label' => trans('backpack::pagemanager.meta_description'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([
        'name' => 'meta_keywords',
        'type' => 'textarea',
        'label' => trans('backpack::pagemanager.meta_keywords'),
        'fake' => true,
        'store_in' => 'extras',
      ]);
      $this->crud->addField([   // CustomHTML
        'name' => 'content_separator',
        'type' => 'custom_html',
        'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
      ]);
      $this->crud->addField([
        'name' => 'content',
        'label' => trans('backpack::pagemanager.content'),
        'type' => 'wysiwyg',
        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
      ]);
    }
  private function reviews()
  {
    $this->crud->addField([   // CustomHTML
      'name' => 'metas_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
    ]);

    $this->crud->addField([
      'name' => 'meta_title',
      'label' => trans('backpack::pagemanager.meta_title'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_description',
      'label' => trans('backpack::pagemanager.meta_description'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_keywords',
      'type' => 'textarea',
      'label' => trans('backpack::pagemanager.meta_keywords'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 'content_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
    ]);
  }

  private function shop()
  {
    $this->crud->addField([   // CustomHTML
      'name' => 'metas_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
    ]);

    $this->crud->addField([
      'name' => 'meta_title',
      'label' => trans('backpack::pagemanager.meta_title'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_description',
      'label' => trans('backpack::pagemanager.meta_description'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([
      'name' => 'meta_keywords',
      'type' => 'textarea',
      'label' => trans('backpack::pagemanager.meta_keywords'),
      'fake' => true,
      'store_in' => 'extras',
    ]);
    $this->crud->addField([   // CustomHTML
      'name' => 'content_separator',
      'type' => 'custom_html',
      'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
    ]);
  }
}
