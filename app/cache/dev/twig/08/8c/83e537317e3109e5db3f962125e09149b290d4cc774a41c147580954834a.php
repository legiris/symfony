<?php

/* AcmeBlogBundle:Article:latestArticles.html.twig */
class __TwigTemplate_088c83e537317e3109e5db3f962125e09149b290d4cc774a41c147580954834a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "  <ul>
    <li class=\"title\">Nejnovější</li>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_blog_article", array("id" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "getId"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "getTitle"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Article:latestArticles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  26 => 5,  23 => 4,  20 => 2,  89 => 24,  86 => 23,  79 => 17,  77 => 16,  74 => 15,  67 => 25,  65 => 23,  59 => 19,  57 => 15,  51 => 11,  48 => 10,  42 => 8,  35 => 5,  32 => 6,  47 => 10,  43 => 9,  39 => 8,  36 => 8,  31 => 6,  28 => 5,);
    }
}
