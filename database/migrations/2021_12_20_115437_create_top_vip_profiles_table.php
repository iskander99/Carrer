<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopVipProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_vip_cons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('is_q_1')->default(0);
            $table->tinyInteger('is_q_2')->default(0);
            $table->tinyInteger('is_q_3')->default(0);
            $table->tinyInteger('is_q_4')->default(0);
            $table->tinyInteger('is_q_5')->default(0);
            $table->tinyInteger('is_q_6')->default(0);
            $table->tinyInteger('is_q_7')->default(0);
            $table->tinyInteger('is_q_8')->default(0);
            $table->tinyInteger('is_q_9')->default(0);
            $table->tinyInteger('is_q_10')->default(0);
            $table->tinyInteger('is_q_11')->default(0);
            $table->tinyInteger('is_q_12')->default(0);
            $table->tinyInteger('is_q_13')->default(0);
            $table->tinyInteger('is_q_14')->default(0);
            $table->tinyInteger('is_q_15')->default(0);
            $table->tinyInteger('is_q_16')->default(0);
            $table->tinyInteger('is_q_17')->default(0);
            $table->tinyInteger('is_q_18')->default(0);
            $table->tinyInteger('is_q_19')->default(0);

            $table->tinyInteger('is_women_package')->default(0);

            $table->integer('c_1_top')->default(0);
            $table->integer('c_1_mid')->default(0);
            $table->integer('c_1_line')->default(0);
            $table->integer('c_1_spec')->default(0);

            $table->integer('c_2_comp')->default(0);

            $table->integer('c_3_hrd')->default(0);

            $table->integer('c_4_top')->default(0);
            $table->integer('c_4_mid')->default(0);
            $table->integer('c_4_line')->default(0);
            $table->integer('c_4_spec')->default(0);

            $table->integer('c_5_comp')->default(0);
            $table->integer('c_6_hrd')->default(0);

            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('link_3')->nullable();

            $table->timestamps();

            $table->index('user_id', 'users_top_vip_idx');
            $table->foreign('user_id', 'user_top_vip_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('top_vip_cons', function (Blueprint $table) {
            $table->dropForeign('user_top_vip_fk');
            $table->dropIndex('users_top_vip_idx');
        });

        Schema::dropIfExists('top_vip_cons');
    }
}

/*
 * is_q_1 Выработка стратегии
 * is_q_2 Диагностика пробелов
 * is_q_3 Подбор новой сферы
 * is_q_4 Анализ целеообразности
 * is_q_5 Карьерный коучинг
 * is_q_6 Составление резюме
 * is_q_7 Продвижение резюме
 * is_q_8 Составление Summary
 * is_q_9 Аудио
 * is_q_10 Видео
 * is_q_11 Подготовка к собеседованию
 * is_q_12 Привлечение отраслевых экспертов
 * is_q_13 Представление в компании мечты
 * is_q_14 Поддержка на испытатольном сроке
 * is_q_15 Предоставление членоство в закрытое
 * is_q_16 Избавление от выгорания
 * is_q_17 Привлечение психолога
 * is_q_18 Профориентация
 * is_q_19 Outplacement
 *
 *
 * is_women_package Имеется ли в вашем арсенале пакет услег для женщин
 *
 * Укажите кол-во трудоустроенных вами кандидатов  в компании с оборотом менее 1 млрд
 * c_1_top  Топ менеджеров
 * c_1_mid  Среднее звено
 * c_1_line Линейных менеджеров
 * c_1_spec Ключевых специалистов
 *
 *
 * c_2_comp В какое кол-во компании с оборотом менее 1 млрд были трудоустроены ваши кандидаты
 *
 * c_3_hrd Какое кол-во отраслевых экспертов менее 1 млрд
 *
 * Укажите кол-во трудоустроенных вами кандидатов  в компании с оборотом более 1 млрд
 * c_4_top Топ менеджеров
 * c_4_mid Среднее звено
 * c_4_line Линейных менеджеров
 * c_4_spec Ключевых специалистов
 *
 * c_5_comp В какое кол-во компании с оборотом более 1 млрд были трудоустроены ваши кандидаты
 * c_6_hrd Какое кол-во отраслевых экспертов более 1 млрд
 */
