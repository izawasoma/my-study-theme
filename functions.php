<?php
/**
 * ページタイトル関連
 */

//ページごとにタイトルタグを出力
add_theme_support("title-tag");
//ページタイトルの区切り文字を変更する
add_filter("document_title_separator","myDocumentSeparator");
function myDocumentSeparator($separator){
    $separator = "|";
    return $separator;
}

/**
 * アイキャッチ
 */
add_theme_support("post-thumbnails");

/**
 * カスタムメニュー機能
 */
add_theme_support("menus");

/**
 * Contact Form 7の整形機能をOFFにする
 */
add_filter("wpcf7_autop_or_not","my_wpcf7_autop");
function my_wpcf7_autop(){
    return false;
}

/**
 * メインクエリを変更する
 */
add_action("pre_get_posts","my_pre_get_posts");
function my_pre_get_posts($query){
    //管理画面・メインクエリ以外には設定しない
    if(is_admin() || !$query->is_main_query()){
        return;
    }
    //トップページの場合
    if($query->is_home()){
        $query->set("posts_per_page",3);
        return;
    }
}

/**
 * 「保護中」の文字を消す
 */
add_filter("protected_title_format","my_protected_title");
function my_protected_title($title){
    return "%s";
}


?>