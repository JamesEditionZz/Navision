<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function datalist()
    {
        $d_after = date('t', strtotime('today'));
        $m_after = date('m', strtotime('today'));
        $y_after = date('Y', strtotime('today')) + 543;

        $y_after = substr($y_after, 2, 2);

        switch ($m_after) {
            case 1:
                $m_after = 'ม.ค.';
                break;
            case 2:
                $m_after = 'ก.พ.';
                break;
            case 3:
                $m_after = 'มี.ค.';
                break;
            case 4:
                $m_after = 'เม.ย.';
                break;
            case 5:
                $m_after = 'พ.ค.';
                break;
            case 6:
                $m_after = 'มิ.ย';
                break;
            case 7:
                $m_after = 'ก.ค.';
                break;
            case 8:
                $m_after = 'ส.ค.';
                break;
            case 9:
                $m_after = 'ก.ย.';
                break;
            case 10:
                $m_after = 'ต.ค.';
                break;
            case 11:
                $m_after = 'พ.ย.';
                break;
            case 12:
                $m_after = 'ธ.ค.';
                break;
        }

        $firstDay = date('Y-m-01');
        $d_before = date('d', strtotime($firstDay . ' -1 day'));
        $m_before = date('m', strtotime('-1 month'));
        $y_before = date('Y', strtotime('today')) + 543;

        $y_before = substr($y_before, 2, 2);

        switch ($m_before) {
            case 1:
                $m_before = 'ม.ค.';
                break;
            case 2:
                $m_before = 'ก.พ.';
                break;
            case 3:
                $m_before = 'มี.ค.';
                break;
            case 4:
                $m_before = 'เม.ย.';
                break;
            case 5:
                $m_before = 'พ.ค.';
                break;
            case 6:
                $m_before = 'มิ.ย';
                break;
            case 7:
                $m_before = 'ก.ค.';
                break;
            case 8:
                $m_before = 'ส.ค.';
                break;
            case 9:
                $m_before = 'ก.ย.';
                break;
            case 10:
                $m_before = 'ต.ค.';
                break;
            case 11:
                $m_before = 'พ.ย.';
                break;
            case 12:
                $m_before = 'ธ.ค.';
                break;
        }

        if ($m_after === 'ม.ค.') {
            $y_before = (date('Y', strtotime('today')) - 1) + 543;
        }

        return view('Page.Datalist', compact('d_after','m_after','y_after','d_before','m_before','y_before'));
    }

    public function importfile()
    {
        return view('Page.importfile');
    }

    public function Change()
    {
        return view('Page.Change');
    }

    public function Product()
    {
        $d_after = date('t', strtotime('today'));
        $m_after = date('m', strtotime('today'));
        $y_after = date('Y', strtotime('today')) + 543;

        $y_after = substr($y_after, 2, 2);

        switch ($m_after) {
            case 1:
                $m_after = 'ม.ค.';
                break;
            case 2:
                $m_after = 'ก.พ.';
                break;
            case 3:
                $m_after = 'มี.ค.';
                break;
            case 4:
                $m_after = 'เม.ย.';
                break;
            case 5:
                $m_after = 'พ.ค.';
                break;
            case 6:
                $m_after = 'มิ.ย';
                break;
            case 7:
                $m_after = 'ก.ค.';
                break;
            case 8:
                $m_after = 'ส.ค.';
                break;
            case 9:
                $m_after = 'ก.ย.';
                break;
            case 10:
                $m_after = 'ต.ค.';
                break;
            case 11:
                $m_after = 'พ.ย.';
                break;
            case 12:
                $m_after = 'ธ.ค.';
                break;
        }

        $firstDay = date('Y-m-01');
        $d_before = date('d', strtotime($firstDay . ' -1 day'));
        $m_before = date('m', strtotime('-1 month'));
        $y_before = date('Y', strtotime('today')) + 543;

        $y_before = substr($y_before, 2, 2);

        switch ($m_before) {
            case 1:
                $m_before = 'ม.ค.';
                break;
            case 2:
                $m_before = 'ก.พ.';
                break;
            case 3:
                $m_before = 'มี.ค.';
                break;
            case 4:
                $m_before = 'เม.ย.';
                break;
            case 5:
                $m_before = 'พ.ค.';
                break;
            case 6:
                $m_before = 'มิ.ย';
                break;
            case 7:
                $m_before = 'ก.ค.';
                break;
            case 8:
                $m_before = 'ส.ค.';
                break;
            case 9:
                $m_before = 'ก.ย.';
                break;
            case 10:
                $m_before = 'ต.ค.';
                break;
            case 11:
                $m_before = 'พ.ย.';
                break;
            case 12:
                $m_before = 'ธ.ค.';
                break;
        }

        if ($m_after === 'ม.ค.') {
            $y_before = (date('Y', strtotime('today')) - 1) + 543;
        }

        return view('Page.Product', compact('d_after','m_after','y_after','d_before','m_before','y_before'));
    }

    public function Customer()
    {
        $d_after = date('t', strtotime('today'));
        $m_after = date('m', strtotime('today'));
        $y_after = date('Y', strtotime('today')) + 543;

        $y_after = substr($y_after, 2, 2);

        switch ($m_after) {
            case 1:
                $m_after = 'ม.ค.';
                break;
            case 2:
                $m_after = 'ก.พ.';
                break;
            case 3:
                $m_after = 'มี.ค.';
                break;
            case 4:
                $m_after = 'เม.ย.';
                break;
            case 5:
                $m_after = 'พ.ค.';
                break;
            case 6:
                $m_after = 'มิ.ย';
                break;
            case 7:
                $m_after = 'ก.ค.';
                break;
            case 8:
                $m_after = 'ส.ค.';
                break;
            case 9:
                $m_after = 'ก.ย.';
                break;
            case 10:
                $m_after = 'ต.ค.';
                break;
            case 11:
                $m_after = 'พ.ย.';
                break;
            case 12:
                $m_after = 'ธ.ค.';
                break;
        }

        $firstDay = date('Y-m-01');
        $d_before = date('d', strtotime($firstDay . ' -1 day'));
        $m_before = date('m', strtotime('-1 month'));
        $y_before = date('Y', strtotime('today')) + 543;

        $y_before = substr($y_before, 2, 2);

        switch ($m_before) {
            case 1:
                $m_before = 'ม.ค.';
                break;
            case 2:
                $m_before = 'ก.พ.';
                break;
            case 3:
                $m_before = 'มี.ค.';
                break;
            case 4:
                $m_before = 'เม.ย.';
                break;
            case 5:
                $m_before = 'พ.ค.';
                break;
            case 6:
                $m_before = 'มิ.ย';
                break;
            case 7:
                $m_before = 'ก.ค.';
                break;
            case 8:
                $m_before = 'ส.ค.';
                break;
            case 9:
                $m_before = 'ก.ย.';
                break;
            case 10:
                $m_before = 'ต.ค.';
                break;
            case 11:
                $m_before = 'พ.ย.';
                break;
            case 12:
                $m_before = 'ธ.ค.';
                break;
        }

        if ($m_after === 'ม.ค.') {
            $y_before = (date('Y', strtotime('today')) - 1) + 543;
        }

        return view('Page.Customer', compact('d_after','m_after','y_after','d_before','m_before','y_before'));
    }

    public function DC1()
    {
        $d_after = date('t', strtotime('today'));
        $m_after = date('m', strtotime('today'));
        $y_after = date('Y', strtotime('today')) + 543;

        $y_after = substr($y_after, 2, 2);

        switch ($m_after) {
            case 1:
                $m_after = 'ม.ค.';
                break;
            case 2:
                $m_after = 'ก.พ.';
                break;
            case 3:
                $m_after = 'มี.ค.';
                break;
            case 4:
                $m_after = 'เม.ย.';
                break;
            case 5:
                $m_after = 'พ.ค.';
                break;
            case 6:
                $m_after = 'มิ.ย';
                break;
            case 7:
                $m_after = 'ก.ค.';
                break;
            case 8:
                $m_after = 'ส.ค.';
                break;
            case 9:
                $m_after = 'ก.ย.';
                break;
            case 10:
                $m_after = 'ต.ค.';
                break;
            case 11:
                $m_after = 'พ.ย.';
                break;
            case 12:
                $m_after = 'ธ.ค.';
                break;
        }

        $firstDay = date('Y-m-01');
        $d_before = date('d', strtotime($firstDay . ' -1 day'));
        $m_before = date('m', strtotime('-1 month'));
        $y_before = date('Y', strtotime('today')) + 543;

        $y_before = substr($y_before, 2, 2);

        switch ($m_before) {
            case 1:
                $m_before = 'ม.ค.';
                break;
            case 2:
                $m_before = 'ก.พ.';
                break;
            case 3:
                $m_before = 'มี.ค.';
                break;
            case 4:
                $m_before = 'เม.ย.';
                break;
            case 5:
                $m_before = 'พ.ค.';
                break;
            case 6:
                $m_before = 'มิ.ย';
                break;
            case 7:
                $m_before = 'ก.ค.';
                break;
            case 8:
                $m_before = 'ส.ค.';
                break;
            case 9:
                $m_before = 'ก.ย.';
                break;
            case 10:
                $m_before = 'ต.ค.';
                break;
            case 11:
                $m_before = 'พ.ย.';
                break;
            case 12:
                $m_before = 'ธ.ค.';
                break;
        }

        if ($m_after === 'ม.ค.') {
            $y_before = (date('Y', strtotime('today')) - 1) + 543;
        }

        return view('Page.DC1', compact('d_after','m_after','y_after','d_before','m_before','y_before'));
    }
}