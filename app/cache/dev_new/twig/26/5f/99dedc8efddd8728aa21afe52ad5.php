<?php

/* AcmeUserBundle:Default:location.html.twig */
class __TwigTemplate_265f99dedc8efddd8728aa21afe52ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeTaskBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("AcmeTaskBundle:Form:fields.html.twig", ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Προσθήκη νέας τοποθεσίας ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"/images/backgroundarticle.png\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">
<h3> Προσθήκη νέας Τοποθεσίας</h3>
</div>
</div>
<div class=\"row article\">
    <div class=\"six columns offset-by-one form\">


<form class=\"nice\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("location_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t
\t";
        // line 26
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "address"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "phone"));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "suntetagmenes"));
        echo "

    ";
        // line 31
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
</form>

    </div>
</div>
";
    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
