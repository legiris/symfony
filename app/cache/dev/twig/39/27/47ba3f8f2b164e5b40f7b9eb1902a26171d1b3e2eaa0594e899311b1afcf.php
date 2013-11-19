<?php

/* AcmeBlogBundle:Blog:index.html.twig */
class __TwigTemplate_392747ba3f8f2b164e5b40f7b9eb1902a26171d1b3e2eaa0594e899311b1afcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeBlogBundle::layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "\t<ul>
\t\t<li class=\"title\">Nejnovější</li>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 11
            echo "\t\t\t<li><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "getTitle"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "\t<div class=\"article\">
\t\t<h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitle"), "html", null, true);
            echo "</h1>
\t\t<p>";
            // line 21
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getText"), 0, 200), "html", null, true);
            echo " ... <a href=\"\" title=\"\">celý&nbsp;článek</a></p>
\t\t<p class=\"date\">Přidáno: ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getDate"), "d.m.Y | H:i"), "html", null, true);
            echo "</p>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  57 => 17,  54 => 16,  49 => 13,  40 => 11,  36 => 10,  32 => 8,  29 => 7,);
    }
}
