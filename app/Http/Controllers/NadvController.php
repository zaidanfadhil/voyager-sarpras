<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\Models\NetworkAdv;
use App\Models\RuangDua;
use App\Models\RuangEmpat;
use App\Models\RuangEnam;
use App\Models\RuangLabAcp;
use App\Models\RuangLabBh;
use App\Models\RuangLabBroadcasting;
use App\Models\RuangLima;
use App\Models\RuangMmAdvance;
use App\Models\RuangNetwork;
use App\Models\RuangRplAdvance;
use App\Models\RuangSatu;
use App\Models\RuangTiga;


class NadvController extends Controller
{
    //ruang network adv
    public function index(){
        $network = NetworkAdv::all();
        //$variable = nama model
        return view('usernya.ruang_network_advances',['networkadv'=>$network]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfnetadv(){
        $network = NetworkAdv::all();
        $pdf = PDF::loadview('laporan.ruangnetwork',['networkadv'=> $network]);
        return $pdf->download('laporan-networkadv.pdf');
    }

    //ruang dua

    public function rdua(){
        $rdua = RuangDua::all();
        //$variable = nama model
        return view('usernya.ruang_duas',['ruangdua'=>$rdua]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfrdua(){
        $rdua = Ruangdua::all();
        $pdfdua = PDF::loadview('laporan.ruangdua',['ruangdua'=> $rdua]);
        return $pdfdua->download('laporan-ruangdua.pdf');
    }

    //ruang empat
    public function rempat(){
        $rempat = RuangEmpat::all();
        //$variable = nama model
        return view('usernya.ruang_empats',['ruangempat'=>$rempat]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfempat(){
        $rempat = RuangEmpat::all();
        $pdfempat = PDF::loadview('laporan.ruangempat',['ruangempat'=> $rempat]);
        return $pdfempat->download('laporan-ruangempat.pdf');
    }

    //ruang enam
    public function renam(){
        $renam = RuangEnam::all();
        //$variable = nama model
        return view('usernya.ruang_enams',['ruangenam'=>$renam]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfenam(){
        $renam = RuangEnam::all();
        $pdfenam = PDF::loadview('laporan.ruangenam',['ruangenam'=> $renam]);
        return $pdfenam->download('laporan-ruangenam.pdf');
    }

    //Ruang Lab ACP
    public function rlacp(){
        $rlacp = RuangLabAcp::all();
        //$variable = nama model
        return view('usernya.ruang_lab_acps',['ruanglabacp'=>$rlacp]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfacp(){
        $rlacp = RuangEnam::all();
        $pdfacp = PDF::loadview('laporan.ruangacp',['ruanglabacp'=> $rlacp]);
        return $pdfacp->download('laporan-ruanglabacp.pdf');
    }

    //Ruang Lab bahasa
    public function rlbh(){
        $rlbh = RuangLabBh::all();
        //$variable = nama model
        return view('usernya.ruang_lab_bhs',['ruanglabbh'=> $rlbh]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfbhs(){
        $rlbh = RuangLabBh::all();
        $pdfbhs = PDF::loadview('laporan.ruangbhs',['ruanglabbh'=> $rlbh]);
        return $pdfbhs->download('laporan-ruanglabbahasa.pdf');
    }

    //Ruang Lab broadcasting
    public function rbc(){
        $rbc =RuangLabBroadcasting::all();
        //$variable = nama model
        return view('usernya.ruang_lab_broadcastings',['ruanglabbroadcasting'=> $rbc]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfbc(){
        $rbc = RuangLabBroadcasting::all();
        $pdfbc = PDF::loadview('laporan.ruangbc',['ruanglabbroadcasting'=> $rbc]);
        return $pdfbc->download('laporan-ruanglabbc.pdf');
    }

    //ruang lima 
    public function rlima(){
        $rlima = RuangLima::all();
        //$variable = nama model
        return view('usernya.ruang_limas',['ruanglima'=> $rlima]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdflima(){
        $rlima = RuangLima::all();
        $pdflima = PDF::loadview('laporan.ruanglima',['ruanglima'=> $rlima]);
        return $pdflima->download('laporan-ruanglima.pdf');
    }

    //ruang mm adv
    public function rmmadv(){
        $rmmadv = RuangMmAdvance::all();
        //$variable = nama model
        return view('usernya.ruang_mm_advances',['ruangmmadvance'=> $rmmadv]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfmmadv(){
        $rmmadv = RuangMmAdvance::all();
        $pdfmmadv = PDF::loadview('laporan.ruangmmadv',['ruangmmadvance'=> $rmmadv]);
        return $pdfmmadv->download('laporan-ruangmmadv.pdf');
    }

    //ruang network
    public function rnet(){
        $rnet = RuangNetwork::all();
        //$variable = nama model
        return view('usernya.ruang_networks',['ruangnetwork'=> $rnet]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfnet(){
        $rnet = RuangNetwork::all();
        $pdfnet = PDF::loadview('laporan.ruangnet',['ruangnetwork'=> $rnet]);
        return $pdfnet->download('laporan-ruangnet.pdf');
    }

    //ruang rpl adv
    public function rrpladv(){
        $rrpladv = RuangRplAdvance::all();
        //$variable = nama model
        return view('usernya.ruang_rpl_advances',['ruangrpladvance'=> $rrpladv]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfrpladv(){
        $rrpladv = RuangRplAdvance::all();
        $pdfrpladv = PDF::loadview('laporan.ruangrpladv',['ruangrpladvance'=> $rrpladv]);
        return $pdfrpladv->download('laporan-ruangrpladv.pdf');
    }

    //ruang satu
    public function rsatu(){
        $rsatu = Ruangsatu::all();
        //$variable = nama model
        return view('usernya.ruang_satus',['ruangsatu'=> $rsatu]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdfsatu(){
        $rsatu = RuangSatu::all();
        $pdfsatu = PDF::loadview('laporan.ruangsatu',['ruangsatu'=> $rsatu]);
        return $pdfsatu->download('laporan-ruangsatu.pdf');
    }

    //ruang tiga

    public function rtiga(){
        $rtiga = RuangTiga::all();
        //$variable = nama model
        return view('usernya.ruang_tigas',['ruangtiga'=> $rtiga]);
        //folder nama view                                //  deklarasi => variable    
    }

    // cetak pdf 
    public function pdftiga(){
        $rtiga = RuangTiga::all();
        $pdftiga = PDF::loadview('laporan.ruangtiga',['ruangtiga'=> $rtiga]);
        return $pdftiga->download('laporan-ruangtiga.pdf');
    }

}
