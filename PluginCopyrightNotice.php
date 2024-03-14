<?php
class PluginCopyrightNotice{
  public function widget_notice($data){
    /**
     * data
     */
    $data = new PluginWfArray($data);
    if(!$data->get('data/year_to')){
      $data->set('data/year_to', date('Y'));
    }
    /**
     * text
     */
    $text = '© [year_from]–[year_to]';
    $text = wfPhpfunc::str_replace('[year_from]', $data->get('data/year_from'), $text);
    $text = wfPhpfunc::str_replace('[year_to]', $data->get('data/year_to'), $text);
    /**
     * element
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag(array('text' => $text));
    wfDocument::renderElement($element);
  }
}