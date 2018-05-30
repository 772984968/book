<?php

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Console;

    /**
 *开发控制器
 */
 class DevelopController extends TemplateController
{

    /**
     * 创建控制器.
     *
     * @return \think\Response
     */
    public function makeController()
    {
        if ($this->request->isAjax()) {
            $data = $this->request->post();
            $module = $data['module'];
            $controller = ucfirst($data['name']);
            if (Console::call('make:controller', [
                $module . '/' . $controller
            ])) {
                return json([
                    'code'=>200,'msg'=>'添加成功']);
            }else{
                return json([
                    'code'=>400,'msg'=>'添加失败']);
            }
            }
            $data['option']=            [
                ['key'=>'module','title'=>'所属模块','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入所属模块:例如admin,api']],
                ['key'=>'name','title'=>'所属控制器','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入控制器名称:首字母大写']],
            ];
            $data['config']=['add'=>['title'=>'添加模块','url'=>'develop/makecontroller']];//获取配置
            $this->assign('data',$data);
      return $this->fetch('template/add');

    }
    /**
     * 创建模型.
     *
     * @return \think\Response
     */
    public function makeModel()
    {
        if ($this->request->isAjax()) {
            $data = $this->request->post();
            $module = $data['module'];
            $model = ucfirst($data['name']);
            if (Console::call('make:model', [
                $module . '/' . $model
            ])) {
                return json([
                    'code'=>200,'msg'=>'添加成功']);
            }else{
                return json([
                    'code'=>400,'msg'=>'添加失败']);
            }
        }
        $data['option']=[
            ['key'=>'module','title'=>'所属模块','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入所属模块:例如admin,api']],
            ['key'=>'name','title'=>'模型名称','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入控制器名称:首字母大写']],
        ];
        $data['config']=['add'=>['title'=>'添加模型','url'=>'develop/makemodel']];//获取配置
        $this->assign('data',$data);
        return $this->fetch('template/add');

    }
    /**
     * {@inheritDoc}
     * @see \app\admin\controller\TemplateController::getTitle()
     */
    public function getTitle()
    {}

    /**
     * {@inheritDoc}
     * @see \app\admin\controller\TemplateController::getOption()
     */
    public function getOption()
    {}




}
