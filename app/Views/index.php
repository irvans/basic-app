<?php

echo theme_widget('page', [
    'text' => $page->page_text,
    'title' => $page->page_name
]);

echo view_cell('BasicApp\Blog\Widgets\LastPosts::widget', ['limit' => 5]);