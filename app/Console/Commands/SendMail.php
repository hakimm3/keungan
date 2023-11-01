<?php

namespace App\Console\Commands;

use App\Exports\IncomeExport;
use Illuminate\Console\Command;
use App\Exports\PengeluaranExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:main';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $to = "trisaabdul@gmail.com";
        $title = "Backup Data";

        if(!is_dir(storage_path('app/public/backup'))){
            mkdir(storage_path('app/public/backup'));
        }

        Excel::store(new IncomeExport(1), 'public/backup/incomes.xlsx');
        Excel::store(new PengeluaranExport(1), 'public/backup/pengeluaran.xlsx');

        Mail::send('emails.backup', [], function($message) use ($to, $title) {
            $message->to($to)->subject($title);
            $message->from(env('MAIL_FROM_ADDRESS'), 'Backup Data');
            $message->attach(storage_path('app/public/backup/incomes.xlsx'));
            $message->attach(storage_path('app/public/backup/pengeluaran.xlsx'));
        });

    }
}