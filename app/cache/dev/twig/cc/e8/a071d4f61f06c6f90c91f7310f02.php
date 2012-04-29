<?php

/* AcmeUserBundle:Default:buy.html.twig */
class __TwigTemplate_cce8a071d4f61f06c6f90c91f7310f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"fos_user_agora\">
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "agora"));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 6
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
            echo "

";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "price"), "html", null, true);
            echo "
";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "origin"), "html", null, true);
            echo "
</li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
