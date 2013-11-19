<?php

/* AcmeBlogBundle:Homepage:article.html.twig */
class __TwigTemplate_928634128a43fcee0f0697887052ebe124c676fb5502b0a21e3be71c48a128ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"article\">
  <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitle"), "html", null, true);
        echo "</h1>
  <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getText"), "html", null, true);
        echo "</p>
  <p class=\"date\">Přidáno: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getDate"), "d.m.Y | H:i"), "html", null, true);
        echo "</p>
</div>
<div id=\"comments\">
  <h3>Přidat komentář</h3>

  <h3>Komentáře:</h3>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Homepage:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  34 => 8,  31 => 7,  28 => 6,);
    }
}
