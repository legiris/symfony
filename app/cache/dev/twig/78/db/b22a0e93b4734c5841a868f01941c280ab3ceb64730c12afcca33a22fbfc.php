<?php

/* AcmeBlogBundle::layout.html.twig */
class __TwigTemplate_78dbb22a0e93b4734c5841a868f01941c280ab3ceb64730c12afcca33a22fbfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/css/blog.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Můj blogísek";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"page\">
  <div id=\"top-menu\"></div>
  <div id=\"left-page\">\t
   ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo "  </div>
  <div id=\"middle-page\">
   ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "  </div>
</div>
";
    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeBlogBundle:Article:latestArticles", array("count" => 5)));
        echo "
   ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "   ";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  75 => 16,  73 => 15,  70 => 14,  64 => 22,  62 => 20,  58 => 18,  56 => 14,  51 => 11,  48 => 10,  42 => 8,  35 => 5,  32 => 4,);
    }
}
