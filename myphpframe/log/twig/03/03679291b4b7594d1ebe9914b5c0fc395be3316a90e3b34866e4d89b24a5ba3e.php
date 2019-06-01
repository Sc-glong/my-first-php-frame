<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html */
class __TwigTemplate_4b11d64c8b7477f6703a19931f386b6d8d6e45734f35dc40fb565d0e30cd1ddc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
    <body>
        <header>
            头部
        </header>
        <content>
            ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "        </content>
        <footer>
            尾部
        </footer>
    </body>
</html>";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  48 => 9,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <body>
        <header>
            头部
        </header>
        <content>
            {% block content%}
            {% endblock%}
        </content>
        <footer>
            尾部
        </footer>
    </body>
</html>", "layout.html", "/Users/wenba/Documents/www/myphpframe/app/views/layout.html");
    }
}
