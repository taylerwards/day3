<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use App\Models\Data_info;
use App\Models\User;
use App\Models\User_info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CrudDay2 extends Component
{


    use WithPagination;

    public $search;
    public $fname;
    public $mname;
    public $lname;

    public $edittingFname;
    public $edittingMname;
    public $edittingLname;
    public $edittingID;
    public $userType;


     public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }

        public function add(){

            Data_info::create([


                'fname'=>$this->fname,
                'mname'=>$this->mname,
                'lname'=>$this->lname,

            ]);

        $this->redirect('/crud');

        }

        public function delete($id){

            
                Data_info::find($id)->delete();


        }

        public function edit($id){

            $this->edittingID = Data_info::find($id)->id;
            $this->edittingFname = Data_info::find($id)->fname;
            $this->edittingMname = Data_info::find($id)->mname;
            $this->edittingLname = Data_info::find($id)->lname;


        }

        public function update(){


            Data_info::find($this->edittingID)->update([


                'fname'=>$this->edittingFname,
                'mname'=>$this->edittingMname,
                'lname'=>$this->edittingLname,


            ]);
            $this->reset();
            $this->redirect('/crud');

        }


    public function mount(){


        $this->userType = Auth::user()->name;
    }



    public function render()
    {
        return view('livewire.crud-day2',[
            
            'users'=>Data_info::where('lname','like',"%".$this->search."%")->paginate(10),
         
            'userType'=>$this->userType,


        ]);



    }
}