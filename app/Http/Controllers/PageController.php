<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'selamat datang';
    }
        public function about(){
            echo'Farhan Ramazain';
        }
        public function articles($id){
            echo 'Halaman Artikel dengan '.$id;
        }
    }


