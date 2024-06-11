<?php 

class Text
{
    private string $styles;
    private string $classes;

    public function __construct(string $style='',string $class='')
    {
        $this->styles = $style;
        $this->classes = $class;
    }

    public function build(string $texto,string $class,string $style) : string
    {
        $this->styles = $style ? $style : $this->styles;
        $this->classes = $class ? $class : $this->classes;
        return " class='{$this->classes}' style='{$this->styles}'>{$texto}</";
    }

    // getters
    public function get_styles(): string
    {
        return $this->styles;
    }
    public function get_classes(): string
    {
        return $this->classes;
    }
    
}


class Paragraph extends Text
{

    public function get(string $texto,string $class='',string $style=''): string
    {
        return "<p{$this->build($texto,$class,$style)}p>";
    }

    public function render(string $texto,string $class='',string $style=''): void
    {
        echo "<p{$this->build($texto,$class,$style)}p>";
    }

}
class Span extends Text
{
    public function get(string $texto,string $class='',string $style=''): string
    {
        return "<span{$this->build($texto,$class,$style)}span>";
    }

    public function render(string $texto,string $class='',string $style=''): void
    {
        echo "<span{$this->build($texto,$class,$style)}span>";
    }

}

class Title extends Text
{
    private $titleLevel = 1;
    public function __construct(int $level=1,string $style='',string $class='')
    {
        parent::__construct($style,$class);
        
        $level = $level > 6 ? 
                    6 
                : 
                    ($level < 1 ? 
                        1 
                    : 
                        $level);

        $this->titleLevel = $level;
    }

    public function get(string $texto,string $class='',string $style=''): string
    {
        return "<h{$this->titleLevel}{$this->build($texto,$class,$style)}h{$this->titleLevel}>";
    }

    public function render(string $texto,string $class='',string $style=''): void
    {
        echo "<h{$this->titleLevel}{$this->build($texto,$class,$style)}h{$this->titleLevel}>";
    }

}