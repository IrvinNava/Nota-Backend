<?php

namespace App\Http\Controllers;


class HomeNotaController extends Controller
{
   public function experiences()
   {
      return View('homeNota.experiences');
   }

   public function experience()
   {
      return View('homeNota.experience');
   }

   public function collection()
   {
      return View('homeNota.collection');
   }

   public function bookingauestionnaire()
   {
      return View('homeNota.bookingquestionnaire');
   }

   public function proposal()
   {
      return View('homeNota.proposal');
   }

}
