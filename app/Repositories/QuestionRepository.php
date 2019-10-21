<?php
namespace App\Repositories;
 
use App\Models\Question;
use App\Contracts\QuestionContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
 
class QuestionRepository extends BaseRepository implements QuestionContract
{
    /**
     * GroupsRepository constructor.
     * @param Question $model
     */
    public function __construct(Question $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
 
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listQuestion(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }
 
    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findQuestionById(int $id)
    {
        try {
            return $this->findOneOrFail($id);
 
        } catch (ModelNotFoundException $e) {
 
            throw new ModelNotFoundException($e);
        }
 
    }
 
    /**
     * @param array $params
     * @return Category|mixed
     */
    public function createQuestion(array $params)
    {
        try {
            $collection = collect($params);
            $fnl = $params['fnl'];
            $fnl1 = $params['fnl1'];
            $fnl2 = $params['fnl2'];
            $fnl3 = $params['fnl3'];
            $fnl4 = $params['fnl4'];
            $fnl5 = $params['fnl5'];
            $fnl6 = $params['fnl6'];
            $fnl7 = $params['fnl7'];
            $fnl8 = $params['fnl8'];
            $fnl9 = $params['fnl9'];
            $fnl10 = $params['fnl10'];
            $fnl11 = $params['fnl11'];
            $fnl12 = $params['fnl12'];
            $fnl13 = $params['fnl13'];
            $fnl14 = $params['fnl14'];
            $fnl15 = $params['fnl15'];
            $fnl16 = $params['fnl16'];
            $fnl17 = $params['fnl17'];
            $fnl18 = $params['fnl18'];
            $fnl19 = $params['fnl19'];
            $fnl20 = $params['fnl20'];
            $fnl21 = $params['fnl21'];
            $fnl22 = $params['fnl22'];
            $fnl23 = $params['fnl23'];
            $fnl24 = $params['fnl24'];
            $fnl25 = $params['fnl25'];
            $fnl26 = $params['fnl26'];
            $fnbd = $params['fnbd'];
            $fnbd1 = $params['fnbd1'];
            $question = serialize($params['question']);
            $merge = $collection->merge(compact('fnl','fnl1','fnl2','fnl3','fnl4','fnl5','fnl6','fnl7','fnl8','fnl9','fnl10','fnl11','fnl12','fnl13','fnl14','fnl15','fnl16','fnl17','fnl18','fnl19','fnl20','fnl21','fnl22','fnl23','fnl24','fnl25','fnl26','fnl','fnl','fnbd','fnbd1','question'));
 
            $task = new Question($merge->all());
 
            $task->save();
 
            return $task;
 
        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }
 
    /**
     * @param array $params
     * @return mixed
     */
    public function updateQuestion(array $params)
    {
        // $task = $this->findQuestionById($params['id']);
 
        // $collection = collect($params)->except('_token');
 
      
        // $question = serialize($params['question']);
        // $merge = $collection->merge(compact('question'));
 
        // $task->update($merge->all());
 
        // return $task;
    }
 
    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteQuestion($id)
    {
        // $task = $this->findQuestionById($id);
 
        // $task->delete();
 
        // return $task;
    }
}