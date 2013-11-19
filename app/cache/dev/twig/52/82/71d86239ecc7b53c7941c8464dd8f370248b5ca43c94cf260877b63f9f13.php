<?php

/* AcmeBlogBundle:Homepage:index.html.twig */
class __TwigTemplate_528271d86239ecc7b53c7941c8464dd8f370248b5ca43c94cf260877b63f9f13 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <div class=\"article\">
      <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitle"), "html", null, true);
            echo "</h1>
      <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getText"), 0, 200), "html", null, true);
            echo " ... <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_blog_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getId"))), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitle"), "html", null, true);
            echo "\">celý&nbsp;článek</a></p>
      <p class=\"date\">Přidáno: ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getDate"), "d.m.Y | H:i"), "html", null, true);
            echo "</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  49 => 10,  43 => 9,  39 => 8,  36 => 7,  31 => 6,  28 => 5,);
    }
}
