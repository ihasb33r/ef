<?php

/* AcmeUserBundle:Default:orders.html.twig */
class __TwigTemplate_93d50eb73e764a4f852851cee93a3b2e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orders_new"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "amount"));
        echo "


    ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
