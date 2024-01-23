<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('produk_kode_barang')->references('kode_barang')->
            on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pesanan_kode_buy')->references('kode_buy')->
            on('pesanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pembayaran_kode_payment')->references('kode_payment')->
            on('pembayarans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relations', function (Blueprint $table) {
    
            $table->dropForeign('relations_produk_kode_barang_foreign');
            $table->dropForeign('relations_pesanan_kode_buy_foreign');
            $table->dropForeign('relations_pembayaran_kode_payment_foreign');
    });
}
};
