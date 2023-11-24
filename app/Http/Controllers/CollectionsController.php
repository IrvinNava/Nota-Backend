<?php

namespace App\Http\Controllers;

class CollectionsController extends Controller
{
   public function collections()
   {
      return View('collections.listado');
   }

   public function addCollection()
   {
      return View('collections.add');
   }

   public function updateCollection()
   {
      return View('collections.edit');
   }
}
