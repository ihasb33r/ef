<?php

/* AcmeUserBundle:Default:user.html.twig */
class __TwigTemplate_7d71fdf09dbc85ba48216ec5d00e9f00 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t
\t";
        // line 4
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "surname"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "phone"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
