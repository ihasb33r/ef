<?php

/* AcmeUserBundle:Default:layout.html.twig */
class __TwigTemplate_19bd2848e2546aa2ca02ae972305aa22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "e-agrotis";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo "</div></div>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\"><div class=\"six columns offset-by-one\">
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "ssssssssssss
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
