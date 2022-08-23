<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function home()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function patinetmontiors()
    {
        return view('user.repairs.patientmonitors');
    }

    public function syringepumps()
    {
        return view('user.repairs.syringepumps');
    }

    public function cautery()
    {
        return view('user.repairs.cautery');
    }

    public function ventilators()
    {
        return view('user.repairs.ventilators');
    }
    
    public function ultrasound()
    {
        return view('user.repairs.ultrasound');
    }

    public function crsystem()
    {
        return view('user.repairs.crsystem');
    }

    public function xray()
    {
        return view('user.repairs.xray');
    }

    public function laparoscopy()
    {
        return view('user.repairs.laparoscopy');
    }

    public function lightsources()
    {
        return view('user.repairs.lightsources');
    }

    public function medicalgrademonitors()
    {
        return view('user.repairs.medical-grade-monitors');
    }

    public function ultrsoundmonitors()
    {
        return view('user.repairs.ultrsoundmonitors');
    }

    public function CTMRI()
    {
        return view('user.repairs.CT-MRI');
    }

    public function pressureinjector()
    {
        return view('user.repairs.pressure-injector');
    }

    public function CTMRIWorkstation()
    {
        return view('user.repairs.CT-MRIWorkstation');
    }

    public function medicalequipment()
    {
        return view('user.repairs.medical-equipment');
    }

    public function ourExpertise()
    {
        return view('user.repairs.our-expertise');
    }

    public function industry()
    {
        return view('user.repairs.industry');
    }

    public function analytical()
    {
        return view('user.repairs.analytical');
    }

    public function whyConnex()
    {
        return view('user.whyconnex');
    }

    public function contact()
    {
        return view('user.contact');
    }    
}
