<?php
class Post
{
private $title;
private $content;
public function __construct(string $title, string $content)
{
$this->title = $title;
$this->content = $content;
}
public function getTitle(): string
{ return $this->title;
}
public function getContent(): string
{ return $this->content;
}} 
trait StringMutator
{
public function bold(string $word): string
{ return sprintf('<b>%s</b>', $word);
}
public function italic(string $word): string
{ return sprintf('<i>%s</i>', $word);
}
public function boldItalic(string $word): string
{ return $this->italic($this->bold($word));
}}
class PostMutator
{
use StringMutator;//Pemanggilan _trait_
private $post;
public function __construct(Post $post)
{
$this->post = $post;
}
public function boldTitle(): string
{ return $this->bold($this->post->getTitle());
}
public function boldContent(): string
{ return $this->bold($this->post->getContent());
}
public function italicBoldContent(): string
{ return $this->boldItalic($this->post->getContent());
}
}
$postMutator = new PostMutator(new Post('Judul', 'Ini contoh content dari berita.'));
echo $postMutator->boldTitle();
echo PHP_EOL;
echo $postMutator->italicBoldContent();