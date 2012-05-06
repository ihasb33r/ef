<?php

/* AcmeUserBundle:Default:meetings.html.twig */
class __TwigTemplate_ca4104b6b4874aaae581f32007a140a1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meetings_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "date"));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "time"));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "duration"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "location"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:meetings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
