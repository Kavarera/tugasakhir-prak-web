<?php
    function getItemsLG($itemsString){
        require_once "koneksi.php";
        $arrayItems = explode('-',$itemsString);

        $itemsHTML = array();
        $index=1;
        foreach($arrayItems as $items){
            $result = mysqli_query($koneksi,'SELECT * FROM produk WHERE id = '.$items);
            $result = mysqli_fetch_row($result);
            $itemHtml = '<div class="row item-cart">
            <div class="col">
                <center>
                <img src="'.$result[4].'" alt=""></center>
            </div>
            <div class="col-8">
                <div class="row d-flex justify-content-start item-title">
                    <h3>'.$result[1].'</h3>
                </div>
                <div class="row d-flex justify-content-start item-subtitle">
                    <span>IDR '.$result[2].'</span>
                </div>
                <div class="row item-desc">
                    <p>'.$result[3].'</p>
                </div>
                <div class="row mb-3">
                    <form class="col d-flex justify-content-end" method="POST" action="hapus_proses.php">
                        <input type="hidden" value="'.$index.'" name="index">
                        <button type="submit" class="d-flex justify-content-end btn-merah">Hapus</button>
                    </form>
                </div>
            </div>
        </div>';

            array_push($itemsHTML,$itemHtml);
            $index++;
        }
        return $itemsHTML;
    }
    function getItemsXS($itemString){
        require "koneksi.php";
        $arrayItems = explode('-',$itemString);

        $itemsHTML = array();
        $index =1;
        foreach($arrayItems as $items){
            $result = mysqli_query($koneksi,'SELECT * FROM produk WHERE id = '.$items);
            $result = mysqli_fetch_row($result);
            $itemHtml = '<div class="row item-cart-mobile d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="'.$result[4].'" class="card-img-top">
                </center>
                <div class="card-body">
                    <h5 class="card-title">'.$result[1].'</h5>
                    <h5 class="card-subtitle text-muted">IDR '.$result[2].'</h5>
                    <div class="d-flex justify-content-end">
                        <form method="POST" action="hapus_proses.php">
                            <input type="hidden" value="'.$index.'" name="index">
                            <button class="btn-merah-mobile" type="submit">
                                Hapus
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>';

            array_push($itemsHTML,$itemHtml);
            $index++;
        }
        return $itemsHTML;
    }
?>