<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

const TABLE_STRT = '<table class="items-center bg-transparent w-full border-collapse">';
const TABLE_END = '</table>';
const THEAD_STRT = '<thead>';
const THEAD_END = '</thead>';
const TR_STRT = '<tr>';
const TR_END = '</tr>';
const TH_STRT = '<th class="px-6 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">';
const TH_END = '</th>';
const TD_STRT = '<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left">';
const TD_END = '</td>';

function dataTable(Collection $data)
{
    $col = $data->first()->toArray();
    echo TABLE_STRT;
    echo THEAD_STRT;
    echo TR_STRT;
    foreach ($col as $column => $value) {
        echo TH_STRT . "$column" . TH_END;
    }
    echo TR_END;

    foreach ($data as $row) {
        echo TR_STRT;
        foreach ($row->toArray() as $value) {
            echo TD_STRT . "$value" . TD_END;
        }
        echo TR_END;
    }
    echo THEAD_END;
    echo TABLE_END;
}

function dynamicDataTable(Collection $data, array $columns)
{
    echo TABLE_STRT;
    echo THEAD_STRT;
    echo TR_STRT;
    foreach ($columns as $key => $value) {
        echo TH_STRT . "$key" . TH_END;
    }
    echo TR_END;
    echo THEAD_END;
    foreach ($data as $row) {
        echo TR_STRT;
        foreach ($row->getAttributes() as $cell => $cv) {
            foreach ($columns as $value) {
                if ($cell === $value) {
                    echo TD_STRT . $cv . TD_END;
                }
            }
        }
        echo TR_END;
    }
    echo TABLE_END;
}
