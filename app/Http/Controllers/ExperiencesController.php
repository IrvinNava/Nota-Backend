<?php

namespace App\Http\Controllers;


class ExperiencesController extends Controller
{
   public function experiences()
   {
      return View('experiences.listado');
   }

   public function addExperience()
   {
      return View('experiences.add');
   }

   public function updateExperience()
   {
      return View('experiences.edit');
   }
}
