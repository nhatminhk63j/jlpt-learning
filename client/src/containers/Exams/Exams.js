import React, { Component } from 'react';
import "./Exam.scss";
import QuestionRadio from '../../components/QuestionRadio/QuestionRadio';

import {part1, part2, part3, part4} from '../../DataTest/Kotoba'

class Exams extends Component {
    constructor(props){
        super(props);
        this.state = {

        };

        this.radioOnchange = this.radioOnchange.bind(this);
    }

    radioOnchange(event){
        console.log(event.target.value);
    }

    render() {
        return (
            <div className="test">
                <div className="row">
                    <div className="col-md-12 text-center test__header">
                        <h2>N5</h2>
                        <h3>げんごちしき（もじ・ごい）</h3>
                        <p>（25ぷん）</p>
                    </div>
                </div>
                <div className="row">
                    {/* Mondai 1 */}
                    <div className="col-md-3"></div>
                    <div className="col-md-6">
                        <h4>問題1: ＿＿＿の言葉の読み方として最もよいものを、1・2・3・4から一つ選びなさい。</h4>

                        {part1.map((item, index) => {
                            return (
                                <QuestionRadio item={item} index={index} key={index} radioOnchange={this.radioOnchange} />
                            )
                        })}
                    </div>
                    <div className="col-md-3"></div>

                    {/* Mondai 2 */}
                    <div className="col-md-3"></div>
                    <div className="col-md-6">
                        <h4>問題2: ＿＿＿の言葉を漢字で書く時、最もよいものを、1・2・3・4から一つ 選びなさい。</h4>

                        {part2.map((item, index) => {
                            return (
                                <QuestionRadio item={item} index={index} key={index} radioOnchange={this.radioOnchange} />
                            )
                        })}
                    </div>
                    <div className="col-md-3"></div>

                    {/* Mondai 3 */}
                    <div className="col-md-3"></div>
                    <div className="col-md-6">
                        <h4>問題3: （　　　）に入れるのに最もよいものを、1・2・3・4から一つ選びなさい。</h4>

                        {part3.map((item, index) => {
                            return (
                                <QuestionRadio item={item} index={index} key={index} radioOnchange={this.radioOnchange} />
                            )
                        })}
                    </div>
                    <div className="col-md-3"></div>

                    {/* Mondai 4 */}
                    <div className="col-md-3"></div>
                    <div className="col-md-6">
                        <h4>問題4: ＿＿＿の言葉に意味が最も近いものを、1・2・3・4から一つ選びなさい。</h4>

                        {part4.map((item, index) => {
                            return (
                                <QuestionRadio item={item} index={index} key={index} radioOnchange={this.radioOnchange} />
                            )
                        })}
                    </div>
                    <div className="col-md-3"></div>
                </div>
            </div>
        );
    }
}

export default Exams;