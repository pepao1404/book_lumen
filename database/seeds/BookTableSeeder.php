<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookTableSeeder extends Seeder {

    public function run()
    {
        $books = [
            ['吾輩は猫である','夏目漱石','吾輩 （ わがはい ） は猫である。名前はまだ無い。 どこで生れたかとんと 見当 （ けんとう ） がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。',1905],
            ['羅生門','芥川龍之介','ある日の暮方の事である。一人の下人げにんが、羅生門らしょうもんの下で雨やみを待っていた。広い門の下には、この男のほかに誰もいない。ただ、所々丹塗にぬりの剥はげた、大きな円柱まるばしらに、蟋蟀きりぎりすが一匹とまっている。',1915],
            ['人間失格','太宰治','私は、その男の写真を三葉、見たことがある。一葉は、その男の、幼年時代、とでも言うべきであろうか、十歳前後かと推定される頃の写真であって、その子供が大勢の女のひとに取りかこまれ、（それは、その子供の姉たち、妹たち、それから、従姉妹いとこたちかと想像される）庭園の池のほとりに、荒い縞の袴はかまをはいて立ち、首を三十度ほど左に傾け、醜く笑っている写真である。',1948],
            ['仮面の告白','三島由紀夫','のこる一人に私の視線が吸い寄せられた。二十二三の、粗野な、しかし浅黒い整った顔立ちの若者であった。彼は半裸の姿で、汗に濡れて薄鼠うすねずみいろをした晒さらしの腹巻を腹に巻き直していた。',1949]
        ];

        foreach ($books as $book){
            DB::table('books')->insert([
                'title' => $book[0],
                'author' => $book[1],
                'content' => $book[2],
                'written_in' => $book[3],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }    
    }
}