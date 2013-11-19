<?php

/* AcmeBlogBundle:Article:article.html.twig */
class __TwigTemplate_60b500a6ba4f61bbb3e9136bf159ce08b0fbbf240840be189aa9a2ac65a1642a extends Twig_Template
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
        echo " <span class=\"right\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("acme_blog_homepage");
        echo "\">Zpět na hlavní stánku</a></span></p>
</div>
<div id=\"comments\">
  <h3>Přidat komentář</h3>
  
  ";
        // line 16
        echo "  
  ";
        // line 18
        echo "  
  ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <table>
\t\t<tr><td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname"), 'label', array("label" => "Jméno:"));
        echo "&nbsp;</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname"), 'widget');
        echo " *(max. 30 znaků)</td></tr>
\t\t<tr><td class=\"top\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'label', array("label" => "Text:"));
        echo "</td><td class=\"top\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'widget');
        echo " *(max. 2500 znaků)</td></tr>
\t\t<tr><td></td><td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("label" => "Přidat komentář"));
        echo "</td></tr>\t  
    </table>  
  ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

  <h3>Všechny komentáře (10)</h3>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Article:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  75 => 23,  69 => 22,  63 => 21,  58 => 19,  55 => 18,  52 => 16,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  28 => 6,);
    }
}
